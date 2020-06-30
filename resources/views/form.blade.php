<!DOCTYPE html>
<html>
    <body>
        <h2>Buat Account Baru!</h1>
        <h4>Sign Up Form</h3>
        <form action="/welcome" method="POST">
        @csrf
            <p>First name:</p>
            <input type="text" name="first-name">
            <p>Last name:</p>
            <input type="text" name="last-name">
            <p>Gender:</p>
            <input type="radio" name="gender">Male  <br>
            <input type="radio" name="gender">Female<br>
            <input type="radio" name="gender">Other <br>
            <p>Nationality:</p>
            <select>
                <option>Indonesian</option>
                <option>Singaporean</option>
                <option>Malaysian</option>
                <option>Australian</option>
            </select>
            <p>Language Spoken:</p>
            <input type="checkbox" name="language">Bahasa Indonesia <br>
            <input type="checkbox" name="language">English          <br>
            <input type="checkbox" name="language">Other            <br>
            <p>Bio:</p>
            <textarea cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>