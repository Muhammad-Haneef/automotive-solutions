<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupportStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $statuses = [
            ['title' => 'Open', 'description' => 'New support request, waiting for response.'],
            ['title' => 'In Progress', 'description' => 'Support team is currently handling the request.'],
            ['title' => 'Pending Customer Response', 'description' => 'Waiting for the customer to provide more details.'],
            ['title' => 'Waiting for Internal Review', 'description' => 'Support request is under internal team discussion.'],
            ['title' => 'Pending Third Party', 'description' => 'Waiting on response or action from a third-party vendor.'],
            ['title' => 'Resolved', 'description' => 'Issue has been resolved successfully.'],
            ['title' => 'Closed', 'description' => 'Support request has been closed after resolution.'],
            ['title' => 'Reopened', 'description' => 'Customer has reopened the ticket after closure.'],
            ['title' => 'Escalated', 'description' => 'Request has been escalated to a senior support team or manager.'],
            ['title' => 'Cancelled', 'description' => 'Customer has withdrawn the request or issue is no longer relevant.'],
            ['title' => 'Merged', 'description' => 'This ticket has been merged with another similar ticket.'],
            ['title' => 'Duplicate', 'description' => 'This is a duplicate request already addressed.'],
            ['title' => 'On Hold', 'description' => 'Ticket is on hold temporarily due to pending conditions.'],
            ['title' => 'Monitoring', 'description' => 'Resolved but under monitoring for recurrence.'],
            ['title' => 'Awaiting Approval', 'description' => 'Pending internal or customer approval before proceeding.'],
            ['title' => 'Auto-Closed', 'description' => 'Automatically closed due to inactivity or resolution timeout.'],
            ['title' => 'Feedback Received', 'description' => 'Customer has provided feedback after resolution.'],
            ['title' => 'Reassigned', 'description' => 'Ticket has been reassigned to a different agent/team.'],
            ['title' => 'Scheduled for Follow-up', 'description' => 'Follow-up scheduled for a future date.'],
            ['title' => 'Partially Resolved', 'description' => 'Some aspects resolved, others still pending.'],
            ['title' => 'System Error', 'description' => 'Support request failed due to a system-level error.'],
            ['title' => 'Under Investigation', 'description' => 'Issue is being deeply investigated.'],
            ['title' => 'Transferred', 'description' => 'Transferred to another department.'],
            ['title' => 'Spam', 'description' => 'Identified as spam or irrelevant.'],
        ];

        foreach ($statuses as $index => $status) {
            DB::table('support_statuses')->insert([
                'title' => $status['title'],
                'description' => $status['description'],
                'sort_by' => $index + 1,
                'is_active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
