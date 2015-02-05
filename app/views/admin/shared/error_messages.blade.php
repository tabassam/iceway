@if($errors->count()>0)
    <div id="prefix_487622065711" class="Metronic-alerts alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><i class="fa-lg fa fa-warning"></i>
        <ul>
            @foreach($errors->all() as $error)
                <li style="color:red">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif