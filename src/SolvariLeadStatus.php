<?php

namespace Solvari;

enum SolvariLeadStatus: string {
    case APPOINTMENT = "APPOINTMENT";
    case CONTACTED = "CONTACTED";
    case IN_CONTACT = "IN_CONTACT";
    case JOB_DONE = "JOB_DONE";
    case LOST = "LOST";
    case QUOTE_ACCEPTED = "QUOTE_ACCEPTED";
    case QUOTE_NOT_ACCEPTED = "QUOTE_NOT_ACCEPTED";
    case QUOTE_SEND = "QUOTE_SEND";
    case RETRY_CONTACT = "RETRY_CONTACT";
    case UNREACHABLE = "UNREACHABLE";
    case USELESS = "USELESS";
}
