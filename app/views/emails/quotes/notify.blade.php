<h3>Quote Request</h3>
<p>A customer has requested a quote through the website</p>

<ul>
<li>Name: {{ $name }}</li>
<li>Company: {{ $company }}</li>
<li><a class="" href="{{ route('quotes.show', $id) }}">Link to Quote request</a></li>
</ul>