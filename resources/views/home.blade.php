<h3>Welcome @if(auth()->user()->name!='Admin')
    {{auth()->user()->name}} 
    @else 
   Admin 
   @endif
</h3>

<h3>Add Product</h3>
<form method="post" action="/store-products" enctype="multipart/form-data">
 @csrf
 <input type="text" name="title" placeholder="Enter title"/><br>
 <textarea name="description" placeholder="Enter description"></textarea><br>
 <input type="text" name="price" placeholder="Enter price"/><br>
 <input type="file" name="prod_images"/><br>
 <input type="submit" value="Add product"/>
</form>

<h3>Products Added</h3>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Status</th>
    </tr>
    @foreach($products as $item)
    <tr>
        <td><a href="/product/{{$item->id}}">{{$item->title}}</a></td>
        <td>{{$item->description}}</td>
        <td>{{$item->price}}</td>
        <td>
        @if($item->prod_images)
        <img src="{{ asset('storage/images/'.$item->prod_images) }}" style="height: 50px;width:100px;">
        @else 
        <span>No image found!</span>
        @endif
       </td>
       <td>{{$item->status}}</td>
    </tr>
    @endforeach
</table>
