<form class="user" action="{{url('api/darDeBaja/'.$id)}}" method="get" id="formBaja{{$id}}">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <button id="btnBaja{{$id}}" type="submit" class="btn">Baja</button>
</form>
