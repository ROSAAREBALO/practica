<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/user')
		     ->assertStatus(200)
			 ->assertSee('food');
    }

    /*@test*/
	function testUsuario(){
		$this->get('/usuarios')
		     ->assertStatus(200)
             ->assertSee('Listado de usuarios')
             ->assertSee('elias')
             ->assertSee('luis');
           

	}
    
    /*@test*/
    function testUsuarioEmpty(){
         $this->get('/usuarios?empty')
              ->assertStatus(200)
              ->assertSee('Listado de usuarios')
             ->assertSee('no hay registrado ningunn usuario');
             
         


    }
}
