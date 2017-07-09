<?php
namespace App\Api;

use \PDO;

class Model
{
    private $connection;

    /**
     * All of the available clause operators.
     *
     * @var array
     */
    protected $operators = [
        '=', '<', '>', '<=', '>=', '<>', '!=',
        'like', 'like binary', 'not like', 'between', 'ilike',
        '&', '|', '^', '<<', '>>',
        'rlike', 'regexp', 'not regexp',
        '~', '~*', '!~', '!~*', 'similar to',
        'not similar to', 'not ilike', '~~*', '!~~*',
    ];

    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        if ($this->connection === null) {
            $this->connection = new PDO(
               "mysql:host=".env('db')['host'].";dbname=".env('db')['name'],
            'root',
                env('db')['pass']
            );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }
        var_dump($this->connection);
    }

public function where ($column, $operator = null, $value = null, $boolean = 'and'){
    $table = $this->table;
    if(is_array($column)){

    }

    $stmt = $this->connection->prepare('
            SELECT '.$this->table.', users.* 
             FROM users 
             WHERE id = :id
        ');


}


    public function find($id)
    {
        $stmt = $this->connection->prepare('
            SELECT "User", users.* 
             FROM users 
             WHERE id = :id
        ');
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Set the fetchmode to populate an instance of 'User'
        // This enables us to use the following:
        //     $user = $repository->find(1234);
        //     echo $user->firstname;
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }
    public function findAll()
    {
        $stmt = $this->connection->prepare('
            SELECT * FROM users
        ');
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');

        // fetchAll() will do the same as above, but we'll have an array. ie:
        //    $users = $repository->findAll();
        //    echo $users[0]->firstname;
        return $stmt->fetchAll();
    }
    public function save(\User $user)
    {
        // If the ID is set, we're updating an existing record
        if (isset($user->id)) {
            return $this->update($user);
        }
        $stmt = $this->connection->prepare('
            INSERT INTO users 
                (username, firstname, lastname, email) 
            VALUES 
                (:username, :firstname , :lastname, :email)
        ');
        $stmt->bindParam(':username', $user->username);
        $stmt->bindParam(':firstname', $user->firstname);
        $stmt->bindParam(':lastname', $user->lastname);
        $stmt->bindParam(':email', $user->email);
        return $stmt->execute();
    }
    public function update(\User $user)
    {
        if (!isset($user->id)) {
            // We can't update a record unless it exists...
            throw new \LogicException(
                'Cannot update user that does not yet exist in the database.'
            );
        }
        $stmt = $this->connection->prepare('
            UPDATE users
            SET username = :username,
                firstname = :firstname,
                lastname = :lastname,
                email = :email
            WHERE id = :id
        ');
        $stmt->bindParam(':username', $user->username);
        $stmt->bindParam(':firstname', $user->firstname);
        $stmt->bindParam(':lastname', $user->lastname);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':id', $user->id);
        return $stmt->execute();
    }

}