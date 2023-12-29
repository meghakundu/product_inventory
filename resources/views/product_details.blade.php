<html>
    <head>
        <title>Product</title>
    </head>
    <body>
        @foreach($data as $productItem)
       Title: {{$productItem->title}}<br>
       Description: {{$productItem->description}}<br>
       Price: {{$productItem->price}}<br>
        @if(auth()->user()->name=='Admin')
       <form action="/approve-status/{{$productItem->id}}" method="POST">
        @csrf
         <button>{{$productItem->status}}</button>
        </form>
       <form action="/reject-status/{{$productItem->id}}" method="POST">
        @csrf
         <input type="text" name="reject_reason" placeholder="Enter reason"/>
        <button>Reject</button>
       </form>
        @endif
        @endforeach
    </body>
</html>
