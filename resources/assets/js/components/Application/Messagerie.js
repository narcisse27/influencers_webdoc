import React, { Component } from 'react';
class Messagerie extends Component{
  constructor(){
    super();
    this.state = {
      conversation: [],
      count: 0,
      messages: [
        {order: 4, content: 'Oui, bien sûr! Ce serait avec plaisir. Quelles sont tes questions ?', userId: 1, timeToAppear: 1.7, tapping: true, tappingAt:1.3, rendered: false},
        {order: 3, content: 'Oui, bien sûr! Ce serait avec plaisir. Quelles sont tes questions ?', userId: 1, timeToAppear: 1.2, tapping: true, tappingAt:0.9, rendered: false},
        {order: 2, content: 'Bien, merci. Je voulais discuter avec toi du rôle des influenceurs dans la région et de blablabla', userId: 0, timeToAppear: 0.8, tapping: true, tappingAt: 0.6, rendered: false},
        {order: 1, content: 'Salut Hélène, je vais super bien et toi ?', userId: 1, timeToAppear: 0.4, tapping: false, rendered: false},
        {order: 0, content: 'Salut Tom, comment tu vas ?', userId: 0, timeToAppear: 0, tapping: false, rendered: false}
      ],
      messagesToShow: [],
      users: [
        {userId: 0, name: 'Paloma', 'picture': 'https://picsum.photos/200/300', role: 'reciever'},
        {userId: 1, name: 'Hélène', 'picture': 'https://picsum.photos/200/300', role: 'sender'}
      ]
    }
  }

  componentWillUnmount(){
    clearInterval(this.timer);
  }
  refreshMessagesStates(){
    this.state.conversation.messages.map( (item) => {
      console.log(item);
    });
    let items = this.state.conversation.messages.map( (item) => {
      if(item.timeToAppear <= this.state.count && item.tappingAt < this.state.count && item.tapping == true)
      {
        item.tapping = false;
      }
      return item;
    });
    this.setState({messages: items});
  }
  tick () {
      this.refreshMessagesStates();
      let itemsToShow = this.state.conversation.messages.filter( (item) => {
        if(item.timeToAppear <= this.state.count || (item.tappingAt <= this.state.count && item.tapping === true)){
          return item
        }
      });
      this.setState({count: (this.state.count + 0.1), messagesToShow: itemsToShow})
  }
  componentDidMount(){
    axios.get('http://localhost:8000/api/conversation/conv_paloma_meuffe_bio')
      .then( (response) => {
        console.log(response);
        this.setState({conversation: response.data})
      })
      .catch( (error) => {
        alert(error);
      });
    setInterval(this.tick.bind(this), 1000)
  }
  renderingUsers(){
    let data = this.state.users.map( (user) => {
        return <img className="icon" src={user.picture} alt={user.name} title={user.name} />
    });
    return data;
  }

  renderingMessages(){
    let messages = this.state.messagesToShow.map( (message) => {
      if(!message.tapping) {
        if (message.user_id === 0) {
          return (<div className="message-wrap">
            <div className="message sended">
              <p>{message.content}</p>
            </div>
          </div>)
        } else {
          return (<div className="message-wrap">
            <div className="message recieved">
              <p>{message.content}</p>
            </div>
          </div>)
        }
      }else{
        return <div className="message-wrap">
          <div className="message tapping">
            <span className="tip"></span>
            <span className="tip"></span>
            <span className="tip"></span>
          </div>
        </div>
      }
    });
    return messages;
  }
  render(){
    return(
      <div className="messagerie-wrap">
        <header className="messagerie-header">
          <div className="title"><h3>John Doe {this.state.count}</h3></div>
          <div className="icons">
            {this.renderingUsers()}
          </div>
        </header>
        <div className="messagerie-body">
          {this.renderingMessages()}
        </div>
      </div>
  )
  }
}
export default Messagerie;