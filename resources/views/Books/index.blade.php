<!DOCTYPE html>
<html lang="en">

<head>
    <title>Books</title>
</head>

<body>
    <h2>Data Buku</h2>
    <br>

    @if (session('status'))
    <h4>{{session('status')}}</h4>
    @endif

    <br>
    <form name="book-save-form" id="book-save-form" action="{{url('/books/save-book')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" id="id"></td>

            </tr>
            <tr>
                <td>Book Name</td>
                <td>:</td>
                <td><input type="text" name="book_name" id="book_name"></td>

            </tr>
            <tr>
                <td>Author</td>
                <td>:</td>
                <td><input type="text" name="author" id="author"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>
    <br>


    <table>
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Publised Date</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $b)
        <tr>
            <td>{{ $b['id'] }}</td>
            <td>{{ $b['book_name'] }}</td>
            <td>{{ $b['author'] }}</td>
            <td>{{ $b['publised_at'] }}</td>
            <td>
                <form action="{{ url('/books/delete-book?id=').$b['id'] }}" method="get">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>

</html>