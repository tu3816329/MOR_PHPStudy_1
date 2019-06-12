<!-- ---------------------------------------Layout------------------------------- -->
@extends("layouts.app")
<!-- ---------------------------------------Style------------------------------- -->
@section('extraStyle')
.left{
    width:45%;
    float:left;
}
.right{
    width:45%;
    float:right;
}
.newsContent{
  border:none;
}
.news {
  padding: 10px;
}
.main{
  padding: 10px;
  display: block;
  overflow:auto;
}
.playerWrapper{
  text-align:center;
  width:100%;
  height:100%;
}
.ulogo{
  position:relative;
  height:100px;
  width:30%;
}
.searchForm{
  height:30px;
  position: absolute;
  margin: auto;
  top: 0;
  left:0;
  right:0;
  bottom: 0;
}
.ulogo img{
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
}
.ulogo img{
  width:100px;
  height:50px;
}
.header {
  height:100px;
}
.searchWrapper{
  position:relative;
  height:100px;
  width:60%;
}
.inline{
  display:inline-block;
}
.center {
  margin-left:50%-this.length/2;
}
.searchButton{
  background:#EBEEE8;
  height:25px;
  width:60px;
  border-radius:5px;
  text-align:center;
}
.uContent{
  max-height:1000px;
  overflow:scroll;
}
.artWrapper{
  <!-- border:solid; -->
  background:#E9E9E9;
}
.searchItem:hover{
  border:4px solid #fff;

}
.searchItem{
  padding:20px;
  background:#fff;
}
.searchItem div{
   display:inline-block;
   vertical-align:text-top;
 }
 .searchItem h3 a{
   margin:0;
   padding:0;
   line-height:1.3;
   font-weight:600;
 }
@endSection()
<!-- ---------------------------------------Script------------------------------- -->
@section('script')

$('document').ready(function(){
  $('#uSearch').submit(function(e){
      e.preventDefault();
      var form =new FormData($('#uSearch')[0]);
      $.ajax({
        url:"search",
        method:"POST",
        processData: false,
        contentType: false,
        data: form,
        success:function(result){
          var rs = JSON.parse(result);
          loadList(rs);
        },error:function(rs){
          alert("Error:"+rs.responseText);
        }
      });
    });
});
function loadList(resp){
  $('#searchContentWrapper').html('');
  $.each(resp.items,function(i,item){
    var thumb= item.snippet.thumbnails.high.url;
    var title = item.snippet.title;
    var description= item.snippet.description;
    var id=item.id.videoId;
    var content = '<article class="searchItem"><div><img src="'+thumb+'" width="320" height="180"></div><div style="padding-left:10px; max-width:60%"><h3><a href="#" onclick="loadVideo(\''+id+'\')" style="text-decoration:none"><b>'+title+'</b><a></h3><p>'+description+'</p></div></article>';
    $('#searchContentWrapper').append(content);
  })
}
function loadVideo(id){
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    url:"search",
    method:"POST",
    data: {"videoId":""+id},
    success:function(result){
      try{
      var rs = JSON.parse(result);
      $('#playerWrapper').html('');
      var videoContent = rs.items[0].player.embedHtml;
      <!-- var content = '<iframe id="uPlayer" src="'+result.+'" width="500px" height="300px" class="center"></iframe>'; -->
      var content ='<div style="width:800px;text-align:center;display:inline-block">';
      content += videoContent;
      content += '<div style="text-align:left;">';
      <!-- $('#playerWrapper').append(content); -->
      $.each(rs.items[0].snippet.tags,function(i,item){
          content+='<a href="#" style="font-size:10px">#'+item+'</a>&nbsp; ';
      });
      content+='<h2>'+rs.items[0].snippet.title+'</h2>';
      content+='<div><div style="display:inline-block"><span>'+rs.items[0].statistics.viewCount+' views</span></div><div style="display:inline-block;float:right">';
      content+='<span><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9bXRGGBtcnOjKp62oCbjmZZw4VELqwFcB1d95dgcDteASj_Gh" width="20"/>'+rs.items[0].statistics.likeCount+'</span>';
      content+='<span><img src="data:image/jpeg;base64,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" width="20"/>'+rs.items[0].statistics.dislikeCount+'</span>';
      content+='</div></div></div></div>';
      $('#playerWrapper').html(content);
      $('#playerWrapper iframe').attr('width','560');
      $('#playerWrapper iframe').attr('height','315');
    }catch(e){
      alert("Exception"+result);
    }
    },error:function(rs){
      alert("Error:"+rs.responseText);
    }});
}
function run(id){
  <!-- = -->
}
@endSection()
<!-- ---------------------------------------Content------------------------------- -->
@section('content')
  <!-- <div class="main">

  </div> -->
<div class="main">
  @if(Route::has('search'))
    <div class="header">
      <div class="ulogo inline">
          <a href="https://youtube.com">
            <img src="https://i.gadgets360cdn.com/large/youtube_logo_new_official_1504077880072.jpg" />
          </a>
      </div>

      <div class="searchWrapper inline">
          <div class="searchForm">
            <form id="uSearch" action="search" method="post">
                @csrf
              <div class="inline">
              <input type="text" name='txtUSearch' style="width:500px" class="center"/>
              <br>
              </div>
              <div class="inline searchButton">
                  <input type='image' border='0' alt="Submit" src="https://png.pngtree.com/svg/20160708/043a78869d.svg" style="width:18px"/>
              <br>
              </div>
            </form>
          </div>
      </div>
    </div>
    <div>
      <div class="playerWrapper" id = "playerWrapper">
      </div>
    </div>
    <hr>
    <div class="uContent">
      <article class="artWrapper" id="searchContentWrapper">
        <article class="searchItem">
          <div>
          <iframe width="280" height="150" src="https://www.youtube.com/embed/9sWEecNUW-o"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
          </div>
          <div style="padding-left:10px;">
          <h3><a href="#" style="text-decoration:none">Title<a></h3>
          <p>Description</p>
          </div>
        </article>
      </article>
    </div>
  @else
    @isset($news)
    <img src=" {{ $news[0]['image'] }} " width="500px" height="300px"/>
    <br>
    <label><b>{{ $news[0]['title'] }}</b></label><br>
    <span>{{ $news[0]['description'] }}</span>
    @endisset
@endif
</div>
  <hr>
  @isset($news)
  <div class="left">
  <table class="newsContent">
      <tbody>
        @for($counter =0;$counter< sizeof($news);$counter++)
          @if (($counter % 2)==0)
              <tr>
                  <td><img src=" {{ $news[$counter]['image'] }} " width="140px" height="84px"/></td>
                  <td>
                  <label><b>{{ $news[$counter]['title'] }}</b></label><br>
                  <span>{{ $news[$counter]['description'] }}</span>
                  </td>
              </tr>
              <tr>
                <td colspan="2"><hr></td>
              </tr>
          @endif
      @endfor
      </tbody>
  </table>
  </div>
  <div class="right">
    <table class="newsContent">
        <tbody>
          @for($counter =0;$counter< sizeof($news);$counter++)
            @if (($counter % 2)==1)
                <tr>
                    <td><img src=" {{ $news[$counter]['image'] }} " width="140px" height="84px"/></td>
                    <td>
                    <label><b>{{ $news[$counter]['title'] }}</b></label><br>
                    <span>{{ $news[$counter]['description'] }}</span>

                    </td>
                </tr>
                <td colspan="2"><hr></td>
            @endif
        @endfor
        </tbody>
    </table>
  </div>
  @endisset
@endSection()
