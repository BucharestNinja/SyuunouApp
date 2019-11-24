<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <table>
  <thead>
  <tr>
    <th>ID</th>
    <th>クローゼット名</th>
  <tr>
  <thead>
  <tbody>
    @foreach ($closetInfo as $closet)
  <tr>
    <td>{{ $closet->closet_no }}</td>
    <td>>{{ $closet->closet_name }}</a><td>
    <td><a href="{{ route('show', ['id' => $closet->closet_id]) }}" class="btn btn-info btn-sm">中身</a></td>
    <td><a href="{{ route('edit', ['id' => $closet->closet_id]) }}" class="btn btn-info btn-sm">修正</a></td>
    <td><form action="{{ route('destroy', [$closet => $closet->id]) }}" method="post">  {% csrf_token %}<button type="submit"class="btn btn-danger btn-sm">削除</button></form></td>
  </tr>
    @endforeach

 <p>
   aaa
 </p>
</html>
