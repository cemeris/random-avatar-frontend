
<form action="https://todo-it.000webhostapp.com/app/public/api.php" onsubmit="postSubmit.bind(this)(event, displayAvatar)">
    <select name="fields[]" id="" multiple>
        <option value="firstname">firstname</option>
        <option value="lastname">lastname</option>
        <option value="years">years</option>
        <option value="image">image</option>
        <option value="email">email</option>
    </select>
    <input type="submit" value="request">
</form>

<div id="app">

</div>

<script src="request.js"></script>
<script src="script.js"></script>