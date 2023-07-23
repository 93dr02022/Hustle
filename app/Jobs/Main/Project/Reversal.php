<?php

namespace App\Jobs\Main\Project;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class Reversal implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public Project $project)
    {
        //
    }

    /**
     * Execute the job.
     * 
     * @return void
     */
    public function handle()
    {
        $project = $this->project->refresh();
        $employer = $project->client;

        DB::beginTransaction();
        try {
            $employer->balance_available = $employer->balance_available + $project->budget_allocation;
            $employer->save();

            $project->budget_allocation =  0;
            $project->save();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
