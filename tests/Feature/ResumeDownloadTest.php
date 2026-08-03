<?php

namespace Tests\Feature;

use Tests\TestCase;

class ResumeDownloadTest extends TestCase
{
    public function test_resume_download_route_returns_download_response(): void
    {
        $response = $this->get(route('resume.download'));

        $response->assertStatus(200);
        $response->assertHeader('content-disposition', 'attachment; filename=Devaraju_R_Resume.pdf');
    }
}
