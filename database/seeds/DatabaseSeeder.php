<?php

use Illuminate\Database\Seeder;
use App\Tree;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{

    public function run()
    {


        for($i=0; $i<=7; $i++) {
            $node = Tree::create(['name' => $this->generate_random_name()]);
        }

            for($i=0; $i<=4; $i++) {
                $node2 = Tree::create(['name' => $this->generate_random_name()], $node);
            }


            $node1 = Tree::create(['name' => $this->generate_random_name()]);
            for($i=0; $i<=2; $i++)
            {
                $node3 = Tree::create(['name' => $this->generate_random_name()], $node1);

                for($i1=0; $i1<=4; $i1++)
                {
                    Tree::create(['name' => $this->generate_random_name()], $node3);
                }


            }
    }

    private function generate_random_name()
    {
        $faker = Factory::create('ru_RU');

        $name = $faker->name;
        $name = explode(' ', $name);
        $name = $name[2].' '.mb_substr($name[1],0,1).'.'.mb_substr($name[0],0,1) .'.';

        return $name;
    }


}
