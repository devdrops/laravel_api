<?php

/**
 * Entidade User da tabela users
 */
class User extends Eloquent
{
    //não exibirá a coluna password nas query SQL.
    protected $hidden = ['password'];
    //somente essas colunas podem ser acessadas para inserção de conteúdo no saveUser.
    protected $fillable = ['first_name','last_name','email','password','city','state'];

    /**
     * Retorna todos os usuário da tabela users
     * @return User object
     */
    public function allUsers()
    {
        return self::all();
    }
    
    /**
     * Cadastra novo usuário
     * @return User object
     */
    public function saveUser()
    {
        $input = Input::all();
        $input['password'] = Hash::make($input['password']);
        $user = new User();
        $user->fill($input);
        $user->save();
        return $user;
    }
    
    /**
     * Retorna o usuário de acordo com id passado, em caso de null retorna false.
     * @param int $id
     * @return boolean | User object
     */
    public function getUSer($id)
    {
        $user = self::find($id);
        
        if(is_null($user))
        {
            return false;
        }
        
        return $user;
    }
    
    /**
     * Atauliza usuário de acordo com id passado
     * @param int $id
     * @return boolean | User object
     */
    public function updateUser($id)
    {
        $user = self::find($id);
        
        if(is_null($user))
        {
            return false;
        }
        
        $input = Input::all();
        if(isset($input['password']))
        {
            $input['password'] = Hash::make($input['password']);
        }
        
        $user->fill($input);
        $user->save();
        return $user;   
    }    

    /**
     * Remove usuário de acordo com id passado.
     * @param int $id
     * @return boolean  | User object
     */
    public function deleteUser($id){
        
        $user = self::find($id);
        if(is_null($user))
        {
            return false;
        }
        
        return $user->delete();
    }
}
