<?php

namespace Tests\Unit;

use App\Child;
use App\Father;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        DB::statement(DB::raw('PRAGMA foreign_keys = ON;'));

        $father = Father::create([]);
        $child =  Child::create([]);

        $child->father()->associate($father);

        $father->delete();

        $this->assertCount(0, Father::all());
        $this->assertCount(0, Child::all());
    }
}
