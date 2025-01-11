<style>
    input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }
    .input-wrapper{
        margin:10px;
    }
    button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #fff;
        cursor: pointer;
    }
</style>



<div>
    <h2>Add new user</h2>

    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
    @endforeach
    @endif -->

    <form action="{{ route('adduser')}}" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="enter user name" name="username" value="{{old('username')}}">
            <span style="color:red" >@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="enter user email" name="email" value="{{old('email')}}">
            <span style="color:red" >@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="enter user city" name="city" value="{{old('city')}}">
            <span style="color:red" >@error('city'){{$message}}@enderror</span>
        </div>

        <div>
        <h5>user skill</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="Sql" id="sql">
        <label for="sql">Sql</label>
        <input type="checkbox" name="skill[]" value="Java" id="java">
        <label for="java">Java</label>
        <span style="color:red" >@error('skill'){{$message}}@enderror</span>
    </div>

    <div class="input-wrapper">
            <button>Add new user</button>
        </div>
    </form>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>


