<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
</head>
<body>
    <form action="{{route('blade.insert')}}" method="post">
        @csrf
    <label for="title">제목 : </label>
    <input type="text" name="Ltitle" id="Ltitle">
    <br>
    <label for="content">내용 : </label>
    <input type="text" name="Lcontent" id="Lcontent">

    <button type="submit">작성</button>
    </form>
</body>
</html>