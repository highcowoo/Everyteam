<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('header')
</head> 
<body>   
<div id="mainimagel" class="mainl imagel">
    <img src ="/image/mainimage.png" alt="faild">
</div>
<div class="mainl figure">
  <a class="figuresmalll" href="{{ url('/') }}">
    EveryTeam 도우미
  </a>
  <a class="figuresmalll" href="{{ url('/create') }}">
    팀 생성하기
  </a>
  <a class="figuresmalll" href="{{ url('/') }}">
    팀찾기
  </a>
  </div>
<div class="mainl figure">
<a class="figuresmalll" href="{{ url('/') }}">
회원수:00 
</a>
<a class="figuresmalll" href="{{ url('/') }}">
 전체팀:00 
</a>
  <a class="figuresmalll" href="{{ url('/') }}">
오늘의팀:00
  </a>
</div>
<div id="annl" class="mainl annmainl">
<div id="annsml" class="annsmalll">
    <div id="newann" class="annl left">
      <a  class="ann_title" href="">&nbsp;&nbsp;새로 올라온 팀을 확인하세요!</a>
      <input type="button" class="ann_plusbtn" onclick="location.href='aa.php'" value="더보기+">
        <table class="list-table">
            <thead>
                <tr>
                    
                     <th width="500">제목</th>
                     
                   
            
                  </tr>
              </thead>
             
            <tbody>
          
            @foreach ($team as $item)
              <tr><td width="500">
                <a href="/teaminfo/{{$item -> id}}">
                  {{$item -> title}}
              </a>
                
            <br>
             </td></tr>
              @endforeach 
            </tbody>
        
          </table>
    </div>
    <div id="customann" class="annl">
      <a  class="ann_title" href="">&nbsp;&nbsp;사용자님께 딱 맞는 팀만 보여드릴게요!</a>
      <input type="button" class="ann_plusbtn" onclick="location.href='aa.php'" value="더보기+">
        <table class="list-table">
            <thead>
                <tr>
                  
                     <th width="500">제목</th>
                   
                  </tr>
              </thead>
    
            <tbody>
              <tr>
                
     
                <td width="500"></td>
              
      
              </tr>
            </tbody>
        
          </table>
        
    </div>
  </div>
</div>

@include('bottom')
</body>
</html>