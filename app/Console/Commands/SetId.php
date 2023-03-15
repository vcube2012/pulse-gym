<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetId extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:id';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tables = \DB::select('SELECT table_name FROM information_schema.tables WHERE table_schema = \'public\' ORDER BY table_name;');
        $ignores = array('admin_setting', 'model_has_permissions', 'model_has_roles', 'password_resets', 'role_has_permissions', 'sessions' ,'club_coach' , 'club_price_category' , 'club_service' ,'baner_club','baner_price_category', 'coach_smartfit' , 'coach_specialization' , 'nova_notifications');
        foreach ($tables as $table) {
            if (!in_array($table->table_name, $ignores)) {
                $seq = \DB::table($table->table_name)->max('id') + 1;
                \DB::select('ALTER SEQUENCE ' . $table->table_name . '_id_seq RESTART WITH ' . $seq);
            }

        }
        return Command::SUCCESS;
    }
}
