@extends('admin.Layouts.Default')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Conversation entre <strong>{{ $data->expediteur_name }}</strong> et <strong>{{ $data->destinataire_name }}</strong>
            </h1>
        </div>
            <div class="row row-cards">
                <div class="col-lg-12">
                    <form action="/addConvMessages" method="post" class="card">
                        <div class="card-header">
                            <h3 class="card-title">Messages</h3>
                        </div>
                        <div class="col-md-12" id="conversation">
                            @foreach($data->messages as $item)
                                <div class="message" id="message_{{ $item->id }}">
                                    <div class="message-recieved">
                                        @if($item->user_id != 0)
                                            <div class="message__content_wrap">
                                                <div class="message__content">
                                                    <textarea name="" id="" cols="" rows="" onkeyup="textAreaAdjust(this)">
                                                        {{ $item->content }}
                                                    </textarea>
                                                </div>
                                                <div class="message__content_handle"></div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="message-sended">
                                        @if($item->user_id === 0)
                                            <div class="message__content_wrap">
                                                <div class="message__content">
                                                    <textarea name="" id="" cols="" rows="" onkeyup="textAreaAdjust(this)">
                                                        {{ $item->content }}
                                                    </textarea>
                                                </div>
                                                <div class="message__content_handle"></div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="message__handle"></div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">message</label>
                                <input id="message__input" type="text" class="form-control" placeholder="Home Address" value="Salut, comment tu vas?">
                            </div>
                            <div class="card-footer text-right">
                                <button onclick="addMessageToConv()" id="btn-add-message-conv" type="submit" class="btn btn-primary">Ajouter à la conv.</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
@section('script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    window.axios.defaults.headers.common = {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };

    $('#btn-add-message-conv').bind('click', addMessageToConv);
    function addMessageToConv(e){
        console.log(this);
        e.preventDefault();
        let val = $('#message__input').val();
        axios.post('localhost:8000/api/', {
            conversation_id: {!! json_encode($data->id) !!},
            order: $('.message').length,
            content: val,
            user_id: 0,
            timeToAppear: '',
            tapping: true,
            tappingAt: null,
            rendered: false
        })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    }
</script>
<!-- Latest Sortable -->
<script src="{{ asset('//rubaxa.github.io/Sortable/Sortable.js') }}"></script>
<script>
    var messagesList = document.getElementById("conversation");
    var messages_list = new Sortable(messagesList, {
        handle: ".message__handle",
        group: {
            name: "messages",
            pull: true,
            put: true
        },
    });

    $('.message__content_handle').bind('click', changeMessageSection);

    function changeMessageSection(e){
        this.message = this.parentNode;
        this.container = this.message.parentNode;
        this.wrapper = this.container.parentNode;
        if(this.container.classList.contains('message-recieved')){
            this.wrapper.getElementsByClassName('message-sended')[0].append(this.message)
        }else{
            this.wrapper.getElementsByClassName('message-recieved')[0].append(this.message)
        }
    }
    function textAreaAdjust(o) {
        o.style.height = "1px";
        o.style.height = (25+o.scrollHeight)+"px";
    }

</script>
@endsection
