<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\CmSms\Bundle\CmSmsBundle\Controller;

use Doctrine\ORM\EntityManager;
use Endroid\CmSms\Bundle\CmSmsBundle\Entity\Message;
use Endroid\CmSms\Bundle\CmSmsBundle\Entity\Status;
use Endroid\CmSms\Bundle\CmSmsBundle\Exception\InvalidStatusDataException;
use Endroid\CmSms\Bundle\CmSmsBundle\Repository\MessageRepository;
use Endroid\CmSms\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Endroid\CmSms\Message as DomainMessage;
use Endroid\CmSms\Status as DomainStatus;
use JMS\Serializer\SerializerBuilder;

/**
 * @Route("/")
 */
class DashboardController extends Controller
{
    /**
     * @Route("/", name="endroid_cm_sms_dashboard")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {
        // Always disable web profiler when using React
        if ($this->has('profiler')) {
            $this->get('profiler')->disable();
        }

        return [];
    }
}