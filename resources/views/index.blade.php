<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="style.css">
  <title>Frontend Mentor | Todo app</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution {
      font-size: 11px;
      text-align: center;
    }

    .attribution a {
      color: hsl(228, 45%, 44%);
    }
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.container {
  justify-content: center;
  text-align: center;

  /* height: 100vh; */
}
body{
    background-color: skyblue !important;
}
.header {
  background-image: url("images/bg-desktop-light.jpg");
  height: 7cm;
}
.title {
  width: 380px;
  display: flex;
  justify-content: space-between;
  /* margin-left: 35%; */
  padding-top: 2cm;
  color: white;
  padding-bottom: 30px;
}
.input input {
  width: 100%;
  height: 1.1cm;
  border: none;
  border-radius: 4px;
  margin-top: 10px;
}
.input input[type="text"]:focus {
  outline: none;
}
.todo_list {
  width: 10.2cm;
  margin-top: 2cm;
  /* box-shadow: 2px 2px 2px 2px rgb(196, 195, 195); */
}
.item {
  /* display: flex;
  justify-content: space-between; */
  text-align: left
  padding: 15px;
  border-bottom: 1px solid #dddde3;
  text-align: start !important;
  padding: 10px;
}
.text {
    margin-bottom: 10px;
  font-weight: bold
}

.input {
  

  width: 10.2cm;
  /* padding-left: 10px; */
  margin-bottom: 100px;  
}

.todo_list {
  background-color: hsl(0, 0%, 100%);
  color: black;
}
.description{
  text-align: left;
  padding: 10px;
  font-weight: bold;
}
.text-danger{
  color: red;
}
input .is-invalid{
    border-color:#e3342f;
}

@media only screen and (max-width: 992px) {
  .todo_list,
  .input,
  .footer,
  .title {
    width: 80%;
  }

  .footer {
    font-size: 9px;
  }
}

  </style>
</head>

<body id="body" class="light">

  <div class="container">
    <center>
      <div class="header">
        <div class="title">
          <h1>T O D O</h1>
        </div>
        <form class="input" action="{{route('saveData')}}" method="POST">
            @csrf 
          <input type="text" id="inputText" name="title" placeholder="Write your todo title...." autofocus  value="{{old('title')}}">
          @error('title')
            <span class="text-danger">{{$message}}</span>
          @enderror
          
          <input type="text" id="description" name="description" placeholder="Write your todo description...." value="{{old('description')}}">
          @error('description')
            <span class="text-danger">{{$message}}</span>
          @enderror
            <input type="submit" value="Add">
          </from>
      </div>
      <div class="todo_list" id="todos">
        @if(count($todos)>0)

        @foreach($todos as $todo)

        <div class="item">
          <div class="text">
            <p>{{$todo->title}}</p>
          </div>
          <div class="decription">
            <p>{{$todo->description}}</p>
          </div>
      </div>
        @endforeach
        @endif
    </center>
  </div>
</body>

</html>