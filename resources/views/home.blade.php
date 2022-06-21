<h1>{{$heading}}</h1>
@foreach ($gigs as $gig)
<h2>{{$gig['title']}} </h2>
<p>{{$gig['description']}} </p>
    
@endforeach