<div>
    <h1>Add new user</h1>

    <form action="adduser" method="post">
        @csrf

    <div>
        <h5>user skill</h5>
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>

        <input type="checkbox" name="skill[]" value="Sql" id="sql">
        <label for="sql">Sql</label>

        <input type="checkbox" name="skill[]" value="Java" id="java">
        <label for="java">Java</label>
    </div>

    
    <div>
        <h5>Gender</h5>
        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label>

        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label>

        
    </div>

    <div>
        <h5>City</h5>
        <select name="city">
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
            <option value="Gujarat">Gujarat</option>
        </select>
    </div>

    <div>
        <h5>Age</h5>
        <input type="range" name="age" min="18" max="100">
    </div>
    <br>
    <button>Add New User</button>
    </form>
</div>
