@if($errors->any())
<div class="errors">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/hokubu" method="post">
    {{-- 以下を入れないとエラーになる --}}
  @csrf
    <div>
      <label for="name">名前</label><br>
      <input type="text" name="name" placeholder="山田太郎">
    </div>
    
  
    <div>
      <label for="body">本文</label><br>
      <textarea name="body" rows="8" cols="80" placeholder="こんにちは"></textarea>
    </div>
    <div>
      <input type="submit" value="送信">
    </div>
  </form>

