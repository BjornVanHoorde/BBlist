<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Scraper</title>
</head>
<body>
    <h1>Scraping</h1>

    <form class="scrape-form" action="{{ route('scrape.categories') }}" method="POST">
        @csrf

        <div class="form-field">
            <label for="shop">Webshop</label>
            <select name="shop" id="shop">
                @foreach ($shops as $key => $shop)
                    <option value="{{ $key }}">
                        {{ $shop }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-field">
            <label for="headCategory">Head Category</label>
            <select name="headCategory" id="headCategory">
                @foreach ($headCategories as $headCategory)
                    <option value="{{ $headCategory->id }}">
                        {{ $headCategory->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-field">
            <label for="url">Collection URL</label>
            <input type="url" name="url" id="url">
        </div>

        <button type="submit">SCRAPE</button>
    </form>

    <table class="categories">
        <th>
            <h2>The Baby's Corner</h2>
        </th>
        @foreach ($babycornerCategories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ route('scrape.articles') }}" method="POST">
                        @csrf
                        <input type="hidden" name="url" value="{{ $category->url }}">
                        <input type="hidden" name="category" value="{{ $category->id }}">
                        <input type="hidden" name="shop" value="babycorner">
                        <button type="submit">Scrape all articles</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <table class="categories">
        <th>
            <h2>Mimi Baby</h2>
        </th>
        @foreach ($mimibabyCategories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ route('scrape.articles') }}" method="POST">
                        @csrf
                        <input type="hidden" name="url" value="{{ $category->url }}">
                        <input type="hidden" name="category" value="{{ $category->id }}">
                        <input type="hidden" name="shop" value="mimibaby">
                        <button type="submit">Scrape all articles</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
