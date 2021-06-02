<link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap-select.min.css"> 
<link rel="stylesheet" href="{{asset('')}}bootstrap/css/bootstrap.min.css">


<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Kiểu</th>
            <th scope="col">Loại</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody>
            @foreach($listDetail as $dt)
          <tr>
            <td>{{$dt->title}}</td>
            <td>{{$dt->nameCategory}}</td>
            <td>{{$dt->nameType}}</td>
            <td>{{$dt->des}}</td>
            <td>
                <button class="btn btn-success"><a href="{{route('viewDetailUser',$dt->id_detail)}}" style="color: white;text-decoration: none">Xem</a></button>
                <button class="btn btn-warning"><a href="{{route('editDetailUser',$dt->id_detail)}}" style="color: white;text-decoration: none">Sửa</a></button>
                <button class="btn btn-danger xoact" url="{{route('deleteDetailUser',$dt->id_detail)}}">Xoá</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
</div>

<div style="margin-left: 80%;">
    <div class="row">
    <button class="btn btn-primary" ><a href="{{route('home')}}" style="color: white">Quay về</a></button>
    <button class="btn btn-success"><a href="{{route('showAddDetailUser')}}" style="color: white">Thêm bài viết</a></button>
    </div>
    
</div>
<script src="{{asset('')}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('index.js')}}"></script>