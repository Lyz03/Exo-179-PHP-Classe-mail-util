<?php

class MailUtils
{

    private string $to;
    private string $subject;
    private string $message;
    private string $from;

    public function __construct($to, $subject, $message, $from) {
        $this->setTo($to);
        $this->setSubject($subject);
        $this->setMessage($message);
        $this->setFrom($from);
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     */
    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = 'From: ' . $from;
    }

    public function sendMail(): string {
        if (mail($this->to, $this->subject, $this->message, $this->from)) {

            return "Message envoyé";

        } else return "Echec lors de l'envoi du message";
    }

}