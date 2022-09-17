<div>
    <table class="table table-striped shadow border border-light ">
        <thead class="text-black bg-secondary">
            <tr>
                <th>ID No</th>
                <th>Brand</th>
                <th>Size</th>
                <th>Price</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shoes as $shoe)
                <tr>
                    <td>{{ $shoe->id }}</td>
                    <td>{{ $shoe->brand }}</td>
                    <td>{{ $shoe->size }}</td>
                    <td>{{ $shoe->price }}</td>
                    <td>{{ $shoe->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['shoe' => $shoe->id]) }}" class="btn btn-info" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['shoe' => $shoe->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    <style>
#basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: white;
}
body{
    background-image: url("images/hoe.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>

</style>

