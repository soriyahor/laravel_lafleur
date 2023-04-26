@if(isset($action))
<form action="{{$action}}" method="POST" class="btn-red" style="width:100px">
@method('delete') @csrf

<input type="submit" value="{{__('SUPPRIMER')}}" >


</form>
@endif










