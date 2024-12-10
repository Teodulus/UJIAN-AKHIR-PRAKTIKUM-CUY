<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'full_text', 'image', 'user_id', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffcce1;
        }

        .header {
            background-color: #ffcce1;
            padding: 20px;
            text-align: center;
            color: #000;
        }

        .content {
            background-color: #ee99c2;
            padding: 40px;
            color: #fff;
        }

        .footer {
            background-color: #ffcce1;
            padding: 10px;
            text-align: center;
            color: #000;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <h1>Article Management</h1>
    </header>

    <!-- Main Content -->
    <main class="content container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Create New Article</h2>
                <form action="submit_article.php" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter article title" required>
                    </div>
                    <div class="mb-3">
                        <label for="full_text" class="form-label">Full Text</label>
                        <textarea class="form-control" id="full_text" name="full_text" rows="5" placeholder="Write your article here" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input type="url" class="form-control" id="image" name="image" placeholder="Enter image URL" required>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Author</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            <option selected disabled>Select author</option>
                            <?php
                            // Example authors array for demonstration
                            $authors = [
                                ['id' => 1, 'name' => 'User 1'],
                                ['id' => 2, 'name' => 'User 2'],
                                ['id' => 3, 'name' => 'User 3']
                            ];
                            foreach ($authors as $author) {
                                echo "<option value=\"{$author['id']}\">{$author['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" id="category_id" name="category_id" required>
                            <option selected disabled>Select category</option>
                            <?php
                            // Example categories array for demonstration
                            $categories = [
                                ['id' => 1, 'name' => 'Technology'],
                                ['id' => 2, 'name' => 'Lifestyle'],
                                ['id' => 3, 'name' => 'Education']
                            ];
                            foreach ($categories as $category) {
                                echo "<option value=\"{$category['id']}\">{$category['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <select multiple class="form-select" id="tags" name="tags[]" required>
                            <?php
                            // Example tags array for demonstration
                            $tags = [
                                ['id' => 1, 'name' => 'Tag 1'],
                                ['id' => 2, 'name' => 'Tag 2'],
                                ['id' => 3, 'name' => 'Tag 3']
                            ];
                            foreach ($tags as $tag) {
                                echo "<option value=\"{$tag['id']}\">{$tag['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-light w-100">Submit</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Article Management</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
