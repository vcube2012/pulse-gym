@isset($feedback)
<div class="container">
    <h2>Club name: {{$feedback->club->name}}</h2>
    <h4>Address: {{$feedback->club->address}}</h4>
    <h3>Name: {{$feedback->name}}</h3>
    <p><b>Coment:</b> {{$feedback->feedback}}</p>
    <span><b>Email:</b> {{$feedback->email}}</span><br>
    <span><b>Date:</b> {{$feedback->created_at}}</span>
</div>
@endisset
