<div>
    <form action="/book/add" method="post">
        @csrf
        <label for="title">title</label>
        <input type="text" name="title" id="title">
        <label for="description">description</label>
        <input type="text" name="decription" id="description">
        <label for="price">price</label>
        <input type="number" name="price" id="price">
        <label for="image_cover_url">image cover url</label>
        <input type="text" name="image_cover_url" id="image_cover_url">
        <input type="submit" value="save">
    </form>
</div>
