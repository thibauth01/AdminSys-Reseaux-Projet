$TTL	86400
@	IN	SOA	ns.wt2.ephec-ti.be. admin.wt2.ephec-ti.be. (
		     2019033003		; Serial
			 604800		; Refresh
			  86400		; Retry
			2419200		; Expire
			  86400 )	; Negative Cache TTL
;
@	IN	NS	ns.wt2.ephec-ti.be.
@	IN	MX	10 mail
ns	IN	A	51.77.141.246
mail	IN	A	51.77.141.246

www	IN	A	51.77.144.85
b2b	IN	CNAME	www

_sip._udp	SRV	0	0	5060	sip
sip	IN	A	51.77.141.246
