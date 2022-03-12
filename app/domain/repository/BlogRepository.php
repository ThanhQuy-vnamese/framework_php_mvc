<?php
declare(strict_types=1);

namespace App\domain\repository;

use App\Core\Database\Query;
use App\domain\entity\Blog;

class BlogRepository implements BlogRepositoryInterface
{

    private Query $query;
    /**
     * @var mixed
     */
    private $db;

    public function __construct()
    {
        $this->query = new Query();
        $this->db = $this->query->getDatabase()->mysql;
    }

    public function addBlog(Blog $blog): int
    {
        if (empty($blog->getAvatar())) {
            return $this->addBlogWithoutImage($blog);
        }

        return $this->addBlogWithImage($blog);
    }

    public function addBlogWithoutImage(Blog $blog): int
    {
        $sql = "INSERT INTO medical_blogs (title, content, user_id) VALUES ('%s', '%s', %s);";
        $query = sprintf($sql, $blog->getTitle(), $blog->getContent(), 1);
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }

    public function addBlogWithImage(Blog $blog): int {
        $sql = "INSERT INTO medical_blogs (title, content, image, user_id) VALUES ('%s', '%s', '%s' ,%s);";
        $query = sprintf($sql, $blog->getTitle(), $blog->getContent(), $blog->getAvatar(), 1);
        $this->db->query($query);

        return (int)$this->db->insert_id;
    }
}
