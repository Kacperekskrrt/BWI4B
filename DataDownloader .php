class Database
{
    // ...

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            $products = [];

            while ($row = $result->fetch_assoc()) {
                $products[] = new Product($row['id'], $row['name'], $row['description'], $row['price']);
            }

            return $products;
        } else {
            return [];
        }
    }

    public function getProductById($id)
