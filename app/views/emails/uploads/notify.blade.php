<h3>Upload</h3>
<p>A customer has uploaded a file through the website</p>

<ul>
<li>Name: {{ $name }}</li>
<li>Company: {{ $company }}</li>
<li><a class="" href="{{ route('uploads.show', $id) }}">Link to Upload</a></li>
</ul>
