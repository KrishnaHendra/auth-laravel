<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Dev</title>
</head>

<body>
    <form action="{{'register'}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone</label>
            <input type="number" name="phone_number" id="phone_number">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role">
                <option value="">Pilih Role</option>
                @foreach($role as $r)
                <option value="{{$r->id_role}}">{{$r->role_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Simpan Data</button>
    </form>
</body>

</html>
