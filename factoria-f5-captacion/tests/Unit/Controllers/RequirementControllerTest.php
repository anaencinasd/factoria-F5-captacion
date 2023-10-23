<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\RequirementController;
use App\Models\Requirement;



class RequirementControllerTest extends TestCase
{
    

    /** @test */
    public function it_can_get_all_Requirements()
    {
        $Requirements = Requirement::factory()->create();

        $response = $this->getJson(route('requirement.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_create_a_Requirement()
    {
        $Requirements = Requirement::factory()->create();

        $RequirementData = [
            'name' => 'Test Requirement',
            'description' =>'Test Description',
        ];

        $response = $this->postJson(route('requirement.store'), $RequirementData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('requirements', $RequirementData);
    }

    /** @test */
    public function it_can_show_a_Requirement()
    {
        $Requirement = Requirement::factory()->create();

        $response = $this->getJson(route('requirement.show', $Requirement->id));

        $response->assertStatus(200);

    }

    /** @test */
    public function it_can_update_a_Requirement()
    {
        $Requirement = Requirement::factory()->create();

        $newData = [
            'name' => 'Updated Requirement',
            'description' =>'Updated Description',
            
        ];

        $response = $this->putJson(route('requirement.update', $Requirement->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('requirements', $newData);
    }

    /** @test */
    public function it_can_delete_a_Requirement()
    {
        $Requirement = Requirement::factory()->create();

        $response = $this->deleteJson(route('requirement.destroy', $Requirement->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('requirements', ['id' => $Requirement->id]);
    }
}