@extends("layouts.app")

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
.main {
  padding: 10px;
}
.news {
  padding: 10px;
}
.main{
  max-width:500px;
}
@endSection()

@section('script')

@endSection()

@section('content')
  <div class="main">
    <img src=" {{ $news[0]['image'] }} " width="500px" height="300px"/>
<br>
        <label><b>{{ $news[0]['title'] }}</b></label><br>
        <span>{{ $news[0]['description'] }}</span>

  </div>
  <hr>
  <div class="left">
  <table class="newsContent">
      <tbody>
        @for($counter =1;$counter< sizeof($news);$counter++)
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
@endSection()
