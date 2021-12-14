@component('mail::message')
# Hi ,{{env('LEAD_NAME')}}<br>
<hr>
New inquiry lead from {{$maildata['name']}}<br>
<hr>
<h4><strong>Subject: </strong> {{$maildata['name']}}</h4><br>
<hr>
<span><strong>Customer name: </strong> {{$maildata['name']}}</span><br>
<span><strong>Customer phone: </strong> {{$maildata['phone']}}</span><br>
<span><strong>Customer vehicle no: </strong> {{$maildata['vehicle']}}</span><br>
{{-- <span><strong>Customer email: </strong> {{$maildata['email']}}</span><br> --}}
{{-- <span><strong>Messagag: </strong> {{$maildata['message']}}</span><br> --}}
{{-- <span><strong>Url: </strong> {{$maildata['url']}}</span><br> --}}
{{-- <span><strong>Source: </strong> {{$maildata['source']}}</span><br> --}}


<hr>

@component('mail::button', ['url' => url('/')])
View inquiry
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent