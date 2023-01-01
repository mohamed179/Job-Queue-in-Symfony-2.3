<?php

namespace Acme\DemoBundle\Service;

use JMS\JobQueueBundle\Entity\Job;

class MyService
{
    private $em;

    public function __construct($entityManager)
    {
        $this->em = $entityManager;
    }

    public function addTheJob()
    {
        $job = new Job('acme:greeting', array('Mohamed'), true, Job::DEFAULT_QUEUE, Job::PRIORITY_DEFAULT);
        $this->em->persist($job);
        $this->em->flush($job);
    }
}