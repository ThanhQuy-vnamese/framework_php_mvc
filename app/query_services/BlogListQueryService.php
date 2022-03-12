<?php
declare(strict_types=1);

namespace App\query_services;

use App\Core\Database\Query;
use App\dto\BlogDto;

class BlogListQueryService implements BlogListQueryServiceInterface
{
    /**
     * @var mixed
     */
    private $db;

    public function __construct()
    {
        $query = new Query();
        $this->db = $query->getDatabase()->mysql;
    }

    public function getBlogList(): array
    {
        $query = "SELECT * FROM medical_blogs;";
        $result = $this->db->query($query);
        if ($result->num_rows > 0) {
            $blogs = [];
            while ($row = $result->fetch_assoc()) {
                $blogs[$row['id']] = new BlogDto($row['id'], $row['title'], $row['created_at']);
            }

            return $blogs;
        }
        $result->free_result();
        return [];
    }
}
