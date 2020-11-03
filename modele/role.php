<?php

class Role
{
    protected string $role;

    public function __construct(string $role)
    {
        $this->role = $role;
    }

    public function getRole(): string
    {
        return $this->role;
    }
    public function setPseudo(string $role)
    {
        $this->role = $role;
    }

}
?>
