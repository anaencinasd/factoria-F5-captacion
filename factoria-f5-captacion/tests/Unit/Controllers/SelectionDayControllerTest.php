<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\SelectionDayController;
use App\Models\SelectionDay;



class SelectionDayControllerTest extends TestCase
{
    

    /** @test */
    public function it_can_get_all_SelectionDays()
    {
        $SelectionDays = SelectionDay::factory()->create();

        $response = $this->getJson(route('selectionDay.index'));

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_create_a_SelectionDay()
    {
        $SelectionDays = SelectionDay::factory()->create();

        $SelectionDayData = [
            'school' => 'Test School',
            'date' => 'Test date',
            'link' => 'Test link',
            'comment' =>'Test comment',
            'document' =>'Test document',
        ];

        $response = $this->postJson(route('selectionDay.store'), $SelectionDayData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('selection_days', $SelectionDayData);
    }

    /** @test */
    public function it_can_show_a_SelectionDay()
    {
        $SelectionDay = SelectionDay::factory()->create();

        $response = $this->getJson(route('selectionDay.show', $SelectionDay->id));

        $response->assertStatus(200);

    }

    /** @test */
    public function it_can_update_a_SelectionDay()
    {
        $SelectionDay = SelectionDay::factory()->create();

        $newData = [
            'school' => 'Updated School',
            'date' => 'Updated date',
            'link' => 'Updated link',
            'comment' =>'Updated comment',
            'document' =>'Updated document',
            
        ];

        $response = $this->putJson(route('selectionDay.update', $SelectionDay->id), $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('selection_days', $newData);
    }

    /** @test */
    public function it_can_delete_a_SelectionDay()
    {
        $SelectionDay = SelectionDay::factory()->create();

        $response = $this->deleteJson(route('selectionDay.destroy', $SelectionDay->id));

        $response->assertStatus(200);
        $this->assertDatabaseMissing('selection_days', ['id' => $SelectionDay->id]);
    }
}