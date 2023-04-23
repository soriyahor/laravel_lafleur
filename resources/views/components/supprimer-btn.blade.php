@if(isset($action))
<form action="{{$action}}" method="POST" class="btn-red">
@method('delete') @csrf

<input type="submit" value="{{__('supprimer')}}" >


</form>
@endif










