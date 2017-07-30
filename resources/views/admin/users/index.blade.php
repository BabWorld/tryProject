@foreach($users as $user)
  <li>{ !! $user['country'] !!} {!! $user['last_name'] !!}</li>
  @endforeach