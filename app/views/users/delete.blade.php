{{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}