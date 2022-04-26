<?php

namespace Draw\Component\Mailer\Email;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class CallToActionEmail extends TemplatedEmail
{
    private ?string $callToActionLink = null;

    public function getContext(): array
    {
        $context = parent::getContext();
        $extraContexts[] = [
            'call_to_action_link' => $this->callToActionLink,
        ];

        return array_merge($context, ...$extraContexts);
    }

    public function getCallToActionLink(): ?string
    {
        return $this->callToActionLink;
    }

    public function callToActionLink(string $callToActionLink): self
    {
        $this->callToActionLink = $callToActionLink;

        return $this;
    }
}
