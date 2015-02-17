<?php

class UserController extends BaseController
{
    /**
     * @var null|object
     */
    protected $user = null;
    
    /**
     * @param User $user
     */
    public function __construct(User $user) 
    {
        $this->user = $user;
    }

    /**
     * Retorna todos os dados da tabela users
     * @return object
     */
    public function allUsers()
    {
        return Response::json($this->user->allUsers(), 200);
    }
    
    /**
     * Retorna o usuário de acordo com id passado.
     * @param int $id
     * @return json
     */
    public function getUser($id)
    {
        $user = $this->user->getUSer($id);
        
        if(!$user)
        {
            return Response::json(['response' => 'Usuário não encontrado'], 400);
        }
        
        return Response::json($user, 200);
    }

    /**
     * Cadastra novos usuários.
     * @return json
     */
    public function saveUser()
    {
        return Response::json($this->user->saveUser(), 200);
    }

    /**
     * Atualiza usuário de acordo com id passado
     * @param int $id
     * @return json
     */
    public function updateUser($id)
    {
        $user = $this->user->updateUser($id);
        
        if(!$user)
        {
            return Response::json(['response' => 'Usuário não encontrado'], 400);
        }
        
        return Response::json($user, 200);
    }

    /**
     * Remove usuário de acordo dom id passado
     * @param int $id
     * @return json
     */
    public function deleteUser($id)
    {
        $user = $this->user->deleteUser($id);
        
        if(!$user)
        {
            return Response::json(['response' => 'Usuário não encontrado'], 400);
        }
        
        return Response::json(['response' => 'Usuário removido com sucesso!'], 200);
    }
}

